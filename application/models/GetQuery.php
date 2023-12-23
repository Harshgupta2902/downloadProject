<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GetQuery extends CI_Model
{

    public function getNavData()
    {
        $this->db->select('navs.id As navs_id, navs.slug_permanent as navs_slug_permanent, navs.name As navs_name, category.name As category_name, category.slug_permanent As category_slug_permanent');
        $this->db->from('navs');
        $this->db->join('category', 'navs.id = category.relation', 'left');
        $query = $this->db->get();
        $result = $query->result_array();
        $organizedData = array();
        foreach ($result as $item) {
            $osKey = strtolower($item['navs_slug_permanent']);
            if (!isset($organizedData[$osKey])) {
                $organizedData[$osKey] = array(
                    'navs_id' => $item['navs_id'],
                    'navs_slug_permanent' => $item['navs_slug_permanent'],
                    'navs_name' => $item['navs_name'],
                    'categories' => array(),
                );
            }
            $organizedData[$osKey]['categories'][] = array(
                'category_name' => $item['category_name'],
                'category_slug_permanent' => $item['category_slug_permanent'],
            );
        }

        return $organizedData;
    }

    public function get_top_random_categories($limit)
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->order_by('RAND()');
        $this->db->limit($limit);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function trending_softwares()
    {
        $query = $this->db->query("SELECT softwares.*, softwaredata.*
                                    FROM `softwares`
                                    JOIN `softwaredata` ON softwares.slug = softwaredata.slug
                                    WHERE softwares.`badge` IS NOT NULL AND TRIM(softwares.`badge`) <> ''
                                    AND softwaredata.`screenshot` IS NOT NULL
                                    ORDER BY RAND()
                                    LIMIT 12");
        $data = $query->result_array();
        return $data;
    }

    public function top_softwares_by_os($osKey)
    {
        $query = $this->db->query("SELECT softwares.*, softwaredata.*
                                    FROM `softwares`
                                    JOIN `softwaredata` ON softwares.slug = softwaredata.slug
                                    WHERE softwares.`badge` IS NOT NULL AND TRIM(softwares.`badge`) <> ''
                                    AND softwaredata.`screenshot` IS NOT NULL
                                    AND softwares.`category_slug` = '$osKey'
                                    ORDER BY RAND()
                                    LIMIT 12");
        $data = $query->result_array();
        return $data;
    }

    public function getProductDetails($softwareslug)
    {
        $softwareDataQuery = $this->db->select('*')
            ->from('softwaredata')
            ->where('slug', $softwareslug)
            ->get();

        $softwareData = $softwareDataQuery->row(); // Assuming you expect only one row

        if ($softwareData) {
            $downloadId = $softwareData->download_id;
            $downloadLink = $this->getDownloadLink($downloadId);

            if ($downloadLink != $softwareData->download_url) {
                // If the download link is different, update the download_url in the softwaredata table
                $this->db->set('download_url', $downloadLink);
                $this->db->where('slug', $softwareslug);
                $this->db->update('softwaredata');
            }
            // If software data is found, perform a join with 'softwares' table
            $joinedQuery = $this->db->select('softwares.*, softwaredata.*')
                ->from('softwares')
                ->join('softwaredata', 'softwaredata.slug = softwares.slug', 'left')
                ->where('softwares.slug', $softwareslug)
                ->get();
            $result = $joinedQuery->result_array();
            return $result[0];
        } else {
            return array(); // Return an empty array if no data is found
        }
    }

    private function getDownloadLink($id)
    {
        try {
            $url = "https://filecr.com/api/actions/downloadlink/?id=$id";
            $jsonResponse = file_get_contents($url);
            
            if ($jsonResponse === false) {
                throw new Exception('Error fetching download link');
            }

            $data = json_decode($jsonResponse, true);

            if (isset($data['url'])) {
                return $data['url'];
            } else {
                throw new Exception('Invalid download link format');
            }
        } catch (Exception $e) {
            // Log the error or handle it as needed
            return null;
        }
    }

    public function get_related_softwares($limit, $subcategorySlug)
    {
        $query = $this->db->query("SELECT softwares.*, softwaredata.*
                                    FROM `softwares`
                                    JOIN `softwaredata` ON softwares.slug = softwaredata.slug
                                    WHERE softwares.sub_category_slug = '$subcategorySlug'
                                    ORDER BY RAND()
                                    LIMIT $limit");
        $data = $query->result_array();
        return $data;
    }

    public function get_all_categories()
    {
        $this->db->select('navs.slug_permanent as navs_slug_permanent, navs.name As navs_name, category.*');
        $this->db->from('navs');
        $this->db->join('category', 'navs.id = category.relation', 'left');
        $query = $this->db->get();
        $result = $query->result_array();

        $grouped_categories = array();

        // Group categories by operating system
        foreach ($result as $category) {
            $os = $category['navs_slug_permanent']; // Assuming there is a column named 'operating_system' in the 'category' table
            if (!isset($grouped_categories[$os])) {
                $grouped_categories[$os] = array();
            }
            $grouped_categories[$os][] = $category;
        }

        return $grouped_categories;
    }

    public function searchSoftwares($keyword)
    {
        $this->db->select('softwares.*, softwaredata.screenshot, softwaredata.version, softwaredata.extra_title');
        $this->db->from('softwares');
        $this->db->join('softwaredata', 'softwares.slug = softwaredata.slug', 'left');
        $this->db->like('softwares.title', $keyword);
        $this->db->or_like('softwares.sub_category_title', $keyword);
        $this->db->or_like('softwares.slug', $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_category_softwares($category_slug)
    {
        $this->db->select('softwares.*, softwaredata.screenshot, softwaredata.version, softwaredata.extra_title');
        $this->db->from('softwares');
        $this->db->join('softwaredata', 'softwares.slug = softwaredata.slug', 'left');
        $this->db->where('softwares.sub_category_slug', $category_slug);
        $this->db->where('softwaredata.screenshot IS NOT NULL');
        $this->db->order_by('RAND()');
        $this->db->limit(100);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_softwares_by_os($os)
    {
        $this->db->select('softwares.*, softwaredata.screenshot, softwaredata.version, softwaredata.extra_title');
        $this->db->from('softwares');
        $this->db->join('softwaredata', 'softwares.slug = softwaredata.slug', 'left');
        $this->db->where('softwaredata.screenshot IS NOT NULL');
        if ($os !== "all") {
            $this->db->where('softwares.category_slug', $os);
        }
        $this->db->order_by('RAND()');
        $this->db->limit(100);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_blogs($limit)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getBlogData($id)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

}

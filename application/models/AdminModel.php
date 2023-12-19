<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

    public function validate_user($email, $password)
    {
        // Validate user credentials against the database
        $query = $this->db->get_where('user', array('email' => $email, 'password' => $password));
        return $query->row_array();
    }

    public function getBlogs()
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function save_blog($data)
    {
        $this->db->insert('blogs', $data);
        return $this->db->insert_id();
    }

    public function updateBlog($blog_id, $data)
    {
        $this->db->where('id', $blog_id);
        $this->db->update('blogs', $data);
    }

    // public function updateTrending($id,$value) {
    // // Assuming you have a 'trending' table with a 'trending' column
    //     $data = array('trending' => $value);

    //     // Assuming you have a unique identifier for your record, replace 'your_id_column' and 'your_id_value' accordingly
    //     $this->db->where('id', $id);
    //     $this->db->update('softdata', $data);
    // }

    public function getBlog()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get("blogs");
        return $query->result();
    }

    public function getSoftwares()
    {

        $softwares = $this->db->select('slug_permanent')
            ->get('category')
            ->result_array();
        return $softwares;
    }

    public function get_sorted_category()
    {
        $query['Windows'] = $this->db->select('category.*, navs.slug_permanent as category_slug_permanent')
            ->join('navs', 'category.relation = navs.id', 'left')
            ->where('relation', '1')
            ->get('category')
            ->result_array();
        $query['mac'] = $this->db->select('category.*, navs.slug_permanent as category_slug_permanent')
            ->join('navs', 'category.relation = navs.id', 'left')
            ->where('relation', '2')
            ->get('category')
            ->result_array();

        $query['android'] = $this->db->select('category.*, navs.slug_permanent as category_slug_permanent')
            ->join('navs', 'category.relation = navs.id', 'left')
            ->where('relation', '3')
            ->get('category')
            ->result_array();
        return $query;
    }

    public function getSoftwareDetails($category_slug, $softwareslug)
    {
        try {
            $url = "https://filecr.com/_next/data/LnRWXyXzsGeT0GM56c-0b/$category_slug/$softwareslug.json?categorySlug=$category_slug&postSlug=$softwareslug";
            echo "<pre>";
            print_r("Runnig for url  =====>>>>" . $url);

            $jsonResponse = file_get_contents($url);
            if ($jsonResponse === false) {
                throw new Exception("Failed to fetch data from $url");
            }
            $data = json_decode($jsonResponse, true);
            $allSoftData = $data["pageProps"]["post"];
            $postId = $allSoftData["id"];
            $existingRecord = $this->db->get_where('softwaredata', array('post_id' => $postId))->row_array();
            if ($existingRecord) {
                $finalRecord = $this->db
                    ->select('softwaredata.*, softwares.*') // Select columns from both tables
                    ->from('softwaredata')
                    ->join('softwares', 'softwaredata.slug = softwares.slug')
                    ->where('softwaredata.post_id', $postId)
                    ->get()
                    ->row_array();
                print_r("Data Already found for the id =====>>>>" . $postId);

                return $finalRecord;

            } else {
                $downloadurl = $this->getDownloadLink($allSoftData['downloads'][0]['links'][0]['id']);
                $dataToInsert = array(
                    'post_id' => $allSoftData["id"],
                    'title' => $allSoftData["title"],
                    'extra_title' => $allSoftData["extra_title"],
                    'slug' => $allSoftData["slug"],
                    'excerpt' => $allSoftData["excerpt"],
                    'article' => $allSoftData["article"],
                    'license' => $allSoftData["license"],
                    'downloads_count' => $allSoftData["downloads_count"],
                    'seo_title' => $allSoftData["seo"]['title'],
                    'seo_description' => $allSoftData["seo"]['description'],
                    'creator_name' => $allSoftData["creators"][0]['name'],
                    'creator_url' => $allSoftData["creators"][0]['url'],
                    'version' => $allSoftData['downloads'][0]['version'],
                    'filename' => $allSoftData['downloads'][0]['filename'],
                    'releaseDate' => $allSoftData['downloads'][0]['releaseDate'],
                    'download_id' => $allSoftData['downloads'][0]['links'][0]['id'],
                    'download_url' => $downloadurl,
                );
                $this->db->insert('softwaredata', $dataToInsert);

                $finalRecord = $this->db
                    ->select('softwaredata.*, softwares.*') // Select columns from both tables
                    ->from('softwaredata')
                    ->join('softwares', 'softwaredata.slug = softwares.slug')
                    ->where('softwaredata.post_id', $postId)
                    ->get()
                    ->row_array();
                // print_r($finalRecord);

                print_r("Data Inserted for the id =====>>>>" . $postId);
                return $finalRecord;
                // echo"<pre>";
            }
        } catch (Exception $e) {
            // Handle the error, log it, or simply continue to the next URL
            echo "Error: " . $e->getMessage() . PHP_EOL;
        }
    }

///// scrap download link of softwares inside data and save to db

    private function getDownloadLink($id)
    {
        $url = "https://filecr.com/api/actions/downloadlink/?id=$id";
        $jsonResponse = file_get_contents($url);
        $data = json_decode($jsonResponse, true);
        $url = $data['url'];
        return $url;
    }

}

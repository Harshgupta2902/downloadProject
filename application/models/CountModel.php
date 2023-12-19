<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CountModel extends CI_Model
{



    public function dataCount(){
        $totalDataCount['totalBlogs'] = $this->db->count_all('blogs');
        $totalDataCount['totalSoftwares'] = $this->db->count_all('softwares');
        $totalDataCount['totalScrapedData'] = $this->scrapedData();
        $totalDataCount['totalUsers'] = $this->db->count_all('user');
        $totalDataCount['totalCategories'] = $this->db->count_all('category');
        $totalDataCount['totalNullDownloadLinks'] = $this->nullLinks();
        $totalDataCount['totalSoftwareCategoriesCount'] = $this->softwareCount();

        return $totalDataCount;
    }

    private function softwareCount()
    {
        $softwares = $this->AdminModel->getSoftwares();
        $extractedData = [];
        foreach ($softwares as $category) {
            $extractedData[$category['slug_permanent']] = $this->db->select('*')
                ->where('sub_category_slug', $category['slug_permanent'])
                ->get('softwares')
                ->num_rows();
        }
        return $extractedData;
    }

    private function nullLinks()
    {
        $query = $this->db->query("SELECT * FROM `softwaredata` WHERE `download_url` IS NULL");
        $data = $query->num_rows();
        // print_r($data);
        return $data;
    }   


    private function scrapedData(){
        $categories = $this->db->select('softwares.id, softwares.slug, softwares.category_slug, softwaredata.slug as softwaredata_slug')
        ->join('softwaredata', 'softwares.slug = softwaredata.slug', 'left')
        ->where('softwaredata.slug IS NOT NULL', null, false)
        ->get('softwares')
        ->num_rows();
        return $categories;
    }

}



// private function softwareCount()
//     {
//         $softwares = $this->AdminModel->getSoftwares();
//         $extractedData = [];

//         foreach ($softwares as $category) {
//             $extractedData[] = [
//                 'name' => $category['slug_permanent'],
//                 'totalCount' => $this->db->select('*')
//                     ->where('sub_category_slug', $category['slug_permanent'])
//                     ->get('softwares')
//                     ->num_rows(),
//             ];
//         }
        
//         return $extractedData;
//     }
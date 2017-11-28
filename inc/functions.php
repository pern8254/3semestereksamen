<?php 
    define("SITENAME", "Vår");
    define("JSONFILE", "data/data.json");
    define("STARTPAGE", "home");

    function GetJsonData() {
        //læs json filen 
        $content = file_get_contents(JSONFILE); 
        //afkode json filen 
        $json = json_decode($content);
        return $json->pages;
    }

    function Menu() {
        $pages = GetJsonData(); 
        echo "<ul>";
        foreach($pages as $page) {
            echo '<li>' . '<a href="?page=' . $page->id . '">' . $page->menuTitle . '</a> ';
            echo '</li>';
        }
        echo '</ul>';
    }

    
    function GetCurrentPage() {
        $currentPageId = STARTPAGE;
        if(isset($_GET["page"])) {
            $currentPageId = $_GET["page"];
        }
        $pages = GetJsonData();
        foreach($pages as $page) {
            if($page->id == $currentPageId) {
                return $page;
            }
        }
    }

?>

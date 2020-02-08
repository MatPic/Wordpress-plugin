<?php
class Zero_Page_Title
{
    public function __construct()
    {
        add_filter('document_title_parts', [$this, 'modify_page_title']) ;
    }

    public function modify_page_title($title)
    {
        $title['MatPic'] .= 'MatPic activé' ;
        return $title ;
    }
}
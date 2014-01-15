<?php


/*

  REQUEST

  keyword
  searchType
  apikey
  storeName
  Content
  category
  filter
  sortBy
  catGroupID
  startIndex
  endIndex
  customData


  

*/

// s/[ ]*\([^ ]\+\)[ ]*/var \$\1\;\nfunction set_\1(\$x) {\n\$this->\1 = \$x;\n}\nfunction get_\1() {\nreturn \$this->\1;\n}\n/


class SearsAPIRequest {
  var $keyword;
  function set_keyword($x) {
    $this->keyword = $x;
  }
  function get_keyword() {
    return $this->keyword;
  }

  var $searchType;
  function set_searchType($x) {
    $this->searchType = $x;
  }
  function get_searchType() {
    return $this->searchType;
  }

  var $apikey;
  function set_apikey($x) {
    $this->apikey = $x;
  }
  function get_apikey() {
    return $this->apikey;
  }

  var $storeName;
  function set_storeName($x) {
    $this->storeName = $x;
  }
  function get_storeName() {
    return $this->storeName;
  }

  var $Content;
  function set_Content($x) {
    $this->Content = $x;
  }
  function get_Content() {
    return $this->Content;
  }

  var $category;
  function set_category($x) {
    $this->category = $x;
  }
  function get_category() {
    return $this->category;
  }

  var $filter;
  function set_filter($x) {
    $this->filter = $x;
  }
  function get_filter() {
    return $this->filter;
  }

  var $sortBy;
  function set_sortBy($x) {
    $this->sortBy = $x;
  }
  function get_sortBy() {
    return $this->sortBy;
  }

  var $catGroupID;
  function set_catGroupID($x) {
    $this->catGroupID = $x;
  }
  function get_catGroupID() {
    return $this->catGroupID;
  }

  var $startIndex;
  function set_startIndex($x) {
    $this->startIndex = $x;
  }
  function get_startIndex() {
    return $this->startIndex;
  }

  var $endIndex;
  function set_endIndex($x) {
    $this->endIndex = $x;
  }
  function get_endIndex() {
    return $this->endIndex;
  }


  var $customData;
  function set_customData($x) {
    $this->customData = $x;
  }
  function get_customData() {
    return $this->customData;
  }


  // sed "s/[ ]*\([^ ]\+\)[ ]*/'\1='.\$this->get_\1().'\&'./"
  function generate_url($server,$version) {
    $url = 'http://'.$server.'/'.
      $version.'/products/search/'.
      $this->get_storeName().'/'.
      $this->get_Content().
      '/keyword/'.$this->get_keyword().'?'.

      'searchType='.$this->get_searchType().'&'.
      'apikey='.$this->get_apikey().'&'.
      'storeName='.$this->get_storeName().'&'.
      'Content='.$this->get_Content().'&'.
      'category='.$this->get_category().'&'.
      'filter='.$this->get_filter().'&'.
      'sortBy='.$this->get_sortBy().'&'.
      'catGroupID='.$this->get_catGroupID().'&'.
      'startIndex='.$this->get_startIndex().'&'.
      'endIndex='.$this->get_endIndex().'&'.
      'customData='.$this->get_customData().'&';

    return $url;


  }



}
?>

<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 17:36
     */

    namespace Builder;


    require_once 'News.php';
    require_once 'NewsBuilder.php';



    /**
     * Class RssNewsBuilder
     *
     * @package builder
     */
    class RssNewsBuilder implements NewsBuilder {


        /**
         * @param $data
         *
         * @return mixed
         */
        public function parse($url) {

            $data = simplexml_load_file($url);
            if($data === FALSE) {
                throw new \Exception('read data ['.htmlspecialchars($url, ENT_QUOTES, mb_internal_encoding()).'] failed !');
            }

            $list = [];
            foreach($data->item as $item) {
                $dc     = $item->children('http://purl.org/dc/elements/1.1/');
                $list[] = new News($item->title, $item->link, $dc->date);
            }

            return $list;

        }

    } 
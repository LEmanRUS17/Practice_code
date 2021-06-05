<?php
    class Transliteration
    {
        private $translit = [
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',   ' ' => ' ',
    
            'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
            'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
            'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
            'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
            'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
            'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
            'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya'
        ];

        public function convertToTransliteration($str)
        {
            $strRu = $this->convertingString($str);
            $result = [];
            
            foreach($strRu as $letter) {
                foreach($this->translit as $key=>$elem) {
                    if($letter == $key) {
                        $result[] = $elem;
                    }
                }
            }

            return implode($result);
        }

        public function convertFromTransliteration($str)
        {
            $strEn = str_split($str);
            $result = [];

            foreach($strEn as $letter) {
                foreach($this->translit as $key=>$elem) {
                    if($letter == $elem) {
                        $result[] = $key;
                    }
                }
            }

            return implode($result);
        }

        private function convertingString($str)
        {
            return preg_split("//u",$str, -1, PREG_SPLIT_NO_EMPTY);
        }
    }
?>
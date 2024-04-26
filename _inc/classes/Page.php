<?php

    class page
    {
        private  $page_name;
    
        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }
    
        function add_title()
        {
            $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
            switch ($page_name) {
                case 'index':
                    echo "<style> body { background: linear-gradient(180deg, rgb(0, 255, 242) 0%, rgb(98, 141, 141) 100%);</style>;} </style>";
                    echo "<title>Cestovná kancelária Vias</title>";
                    break;
                case 'destinacie':
                    echo "<style> body { background: radial-gradient(circle, rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>";
                    echo "<title>Destinácie</title>";
                    break;
                case 'kontakt':
                    echo "<style> body { background: radial-gradient(circle, rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>";
                    echo "<title>Kontakty</title>";
                    break;
                case 'sluzby':
                    echo "<style> body { background: radial-gradient(circle, rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>";
                    echo "<title>Služby</title>";
                    break;
            }        
        }
        function add_scripts()
        {
            echo('<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>');
            echo('<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>');
            echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>');
            $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            switch($page_name)
            {
                case 'index':
                    echo('<script src="/Adam_Gal_Cestovna_kancelaria/js/index.js"></script>');
                    break;
                case 'destinacie':
                    echo('<script src="/Adam_Gal_Cestovna_kancelaria/js/destinacie.js"></script>');
                    break;
                case 'kontakt':
                    echo('<script src="/Adam_Gal_Cestovna_kancelaria/js/kontakt.js"></script>');
                    break;
                case 'sluzby':
                    echo('<script src="/Adam_Gal_Cestovna_kancelaria/js/sluzby.js"></script>');
                    break;
            }
        }
    }

?>

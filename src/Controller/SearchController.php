<?php  
    namespace Weliton\Leks\Controller;

class SearchController implements InterfaceController
{
    public function request(): void
    {
        $search = filter_input(INPUT_GET,'search',FILTER_SANITIZE_STRING);

        echo $search;
    }
}
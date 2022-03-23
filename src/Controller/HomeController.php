<?php
    namespace Weliton\Leks\Controller;

use Weliton\Leks\Helper\RenderHtml;

class HomeController implements InterfaceController
{
    use RenderHtml;
    public function request(): void
    {
        echo $this->html('/site/home.php',[
           "titulo" => "Lek's"
        ]);
    }
}
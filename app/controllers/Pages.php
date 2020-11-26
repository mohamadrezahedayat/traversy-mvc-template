<?php
/*
*هر کنترلر به طور مجزا از کلاس کنترل اصلی
*ارث بری میکند بنابراین علاوه بر متود
*(که به ازای هر متود اختصاصی فایلی هم نام با آن که
* معادل یک صفحه ویو است وجود دارد)های اختصاصی 
* دارای متود های ویو و مدل
*ار کلاس والد هستند
*/
class Pages extends Controller
{
    public function __construct()
    {
       
    }
    public function index()
    {
        $data = [
            'title' => 'Traversy MVC'
        ];

        $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = ['title' => 'About Us'];
        $this->view('pages/about', $data);
    }
}

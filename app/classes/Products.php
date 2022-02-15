<?php


namespace App\classes;


class Products
{

    protected $allProducts;
    protected $result =[];
    public function index(){
        return [
            0=>[
                "id"=>1,
                "category-id"=>1,
                "title"=>"Amar Ekushey Book Fair 2022 begins Tuesday",
                "description"=>"The book fair will be held at Bangla Academy premises and the adjacent venue at Suhrawardi Udyan in the capital. This year",
                "image"=>"assets/img/new1.jpg"
            ],
            1=>[
                "id"=>1,
                "category-id"=>1,
                "title"=>"Pahela Falgun, Valentine's Day bring back joy in Dhaka streets",
                "description"=>"Dhaka has worn a colorful look as festival-loving Bangladeshi people are celebrating the first day of the most anticipated season Basanta (Spring) and globally",
                "image"=>"assets/img/new2.jpg"
            ],
            2=>[
                "id"=>2,
                "category-id"=>2,
                "title"=>"Bangladesh safest, most transparent RMG maker in the world: BGMEA",
                "description"=>"This achievement came as a result of the firm determination, efforts and investment of entrepreneurs along with the support of",
                "image"=>"assets/img/new3.jpg"
            ],
            3=>[
                "id"=>2,
                "category-id"=>2,
                "title"=>"Company Act needs amendment: Commerce secretary",
                "description"=>"The Company Act was last amended in 1994 and it needs to be made time-befitting to adopt so many changes in the globa",
                "image"=>"assets/img/b1.jpg"
            ],
            4=>[
            "id"=>2,
            "category-id"=>2,
                "title"=>"Amar Ekushey Book Fair 2022 begins Tuesday",
            "description"=>"product description 3",
            "image"=>"assets/img/b2.jpg"
            ],
            5=>[
            "id"=>3,
            "category-id"=>3,
                "title"=>"Amar Ekushey Book Fair 2022 begins Tuesday",
            "description"=>"product description 3",
            "image"=>"assets/img/b3.jpg"
            ],
            6=>[
                "id"=>3,
                "category-id"=>3,
                "title"=>"Myanmar junta says won’t attend ASEAN summit",
                "description"=>"Myanmar’s junta on Monday said it would not attend an upcoming ASEAN summit after the bloc’s “regrettable” exclusion of its top",
                "image"=>"assets/img/w1.png"
            ],
            7=>[
                "id"=>3,
                "category-id"=>3,
                "title"=>"EU mulls emergency summit over Ukraine crisis",
                "description"=>"Iran on Monday said an agreement to revive a 2015 nuclear deal with world powers was “at hand”, but insisted that sanctions be",
                "image"=>"assets/img/s2.jpg"
            ],
            8=>[
                "id"=>1,
                "category-id"=>1,
                "title"=>"EU mulls emergency summit over Ukraine crisis",
                "description"=>"EU leaders could hold an emergency summit on the Ukraine crisis this week, on the sidelines of a meeting with their African",
                "image"=>"assets/img/new3.jpg"
            ],
        ];
    }

    public function shortProducts($category_Id)
    {
        $this->allProducts =$this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product["category-id"] == $category_Id)
            {
                array_push($this->result,$product);
            }
        }
        return $this->result;

    }
    public function getProductDetails($product_id)
    {
        $this->allProducts =$this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product["id"] == $product_id)
            {
                return $product;
            }
        }


    }

}
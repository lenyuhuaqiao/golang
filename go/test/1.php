<?php
    class A{
        protected $b;
        public function __construct(B $b){
            $this->b = $b;
        }
        public function get (){
            echo 1;
        }

        public function info(){
            echo $this->b->getIoc();
        }
    }

    class B{
        public function getB(){
            echo 22;
        }

        public function getIoc(){
            echo 'Ioc';
        }
    }

    class C {

        protected $ss = [];
        public function __construct(){
            $this->ss['B'] = New B();
        }

        public function make(string $test){
            return $this->ss[$test];
        }


        
    }
    $c = New C();
    $b = $c->make('B');
    var_dump($b);
    $a = New A($b);
    echo $a->info(); 
    

?>
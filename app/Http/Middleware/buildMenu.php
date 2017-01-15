<?php

namespace App\Http\Middleware;

use Closure;
use App;
use App\MenuBar;
use Tree\Node\Node;
//session_start();//php session from scratch
class buildMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {//it is used to build a dynmaic menu and store it in the session variable !
        //build tree from DB once for good performance and store it in session:
        //if(!isset($_SESSION["menu"])){
            //load the menu table
            $tableMenu = MenuBar::
                        orderBy('parent_id','ASC')
                        ->orderBy('ordering','ASC')
                        ->get();
            $_SESSION["menu"]=$this->buildMenuTree($tableMenu);
        //}
        return $next($request);
    }

    private function buildMenuTree($tableMenu){
        $root = (new Node('root'));
        
        //we ordered it by parent_id and siblings order
        foreach($tableMenu as $row){
            //we need to navigate through root and put each node in its correct posion
            $node = new Node($row);
            if($node->getValue()->parent_id == '0'){
                $root->addChild($node);
            }else{
                foreach($root->getChildren() as $cursor){
                    $this->InsertNode($cursor,$node);
                }
            }
        }
        //return the generated tree.
        return $root;
    }

    //recursion call to insert the node in its correct posion
    private function InsertNode($sourceNode,$newNode){
        if($sourceNode->getValue()->id == $newNode->getValue()->parent_id){
            $sourceNode->addChild($newNode);
        }else{
            foreach($sourceNode->getChildren() as $cursor){
                $this->InsertNode($cursor,$newNode);
            }
        }
        return $sourceNode;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //Mass assigment
    protected $fillable = ['status'];

    public function approve(){
      $this->updateCustomIDAndStatus();
    }

    public function generateCustomID(){
      return md5("$this->id $this->updated_at");
    }

    public function updateCustomIDAndStatus(){
      $this->status = "approved";
      $this->customid = $this->generateCustomID();
      $this->save();
    }



    public function InShoppingCarts(){
      return $this->hasMany('App\InShoppingCarts');
    }

    public function products(){
      return $this->belongsToMany('App\Product', 'in_shopping_carts')
                  ->withPivot('id');
    }


    // public function productsAcum(){
    //
    //   $allproducts = products()->groupBy('id');
    //   return $allproducts;
    //
    //
    // }

    public function productsSize(){
      return $this->products()->count();
    }

    public function total(){
      return $this->products()->sum('pricing');
    }
    public function totalUSD(){
      return $this->products()->sum('pricing') / 100;
    }

    public static function findOrCreateBySessionID($shopping_cart_id){
      if($shopping_cart_id)
        // buscar el carrito de compra con este id
        return ShoppingCart::findBySession($shopping_cart_id);
      else
        //Crear carrito
        return ShoppingCart::createWhithoutSession();

    }

    public static function findBySession($shopping_cart_id){
      return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWhithoutSession(){
      return ShoppingCart::create([
        "status" => "incompleted"
      ]);
      // $shopping_cart = new ShoppingCart;
      //
      // $shopping_cart->status = "incompleted";
      //
      // $shopping_cart->save();
      //
      // return $shopping_cart;
    }
}

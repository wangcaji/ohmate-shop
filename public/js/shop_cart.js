if (localStorage.cart != 'undefined' && localStorage.cart) {
  var cart = JSON.parse(localStorage.cart);
} else {
  var cart = [];
}


var shop_cart = new Vue({
  el: '#cart_form',
  data: {
    cart: cart,

    person: {
      beans: 90000,
      consume: 0
    }

  },

  computed: {
    priceAll: function () {
      var all = 0;
      for (i = 0; i < this.cart.length; i++) {
        all += this.cart[i].price * this.cart[i].num;
      }
      return all;
    },
    priceDiscount: function () {
      this.person.consume =
        this.person.beans < this.priceAll * 100 ? this.person.beans : this.priceAll * 100;
      return this.person.consume / 100;
    },
    priceCount: function () {
      return this.priceAll + 8 - this.priceDiscount;
    }

  },

  methods: {
    removeGoods: function (e) {
      this.cart.$remove(e);
      localStorage.cart = JSON.stringify(this.cart);
    },
    priceGoods: function (e) {
      return e.price * e.num;
    },
    numMinus: function (e) {
      if (e.num >= 2) {
        e.num--;
      }
    },
    numAdd: function (e) {
      if (e.num <= 98) {
        e.num++;
      }
    },
    beansConsume: function () {
    },
    postCart: function() {
      console.log(JSON.stringify(shop_cart.$data));
      $.post('/shop/order/create',JSON.stringify(shop_cart.$data),
        function(data, status){
          if (data.success) {
          } else {
            alert('服务器异常!');
          }
        }, "json"
      );
    }
  }
});

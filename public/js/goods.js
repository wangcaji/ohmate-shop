if (localStorage.cart != 'undefined') {
  var cart = JSON.parse(localStorage.cart);
} else {
  var cart = [];
}


var list = new Vue({
    el: '#goods',
    data: {
      goods: {
        id: '2',
        name: '诺和针',
        tag: '一次性使用无菌注射针',
        price: 22.00,
        priceBefore: 30.00,
        num: 1
      },
      cart: cart
    },
    computed: {
      alreadyHave: function () {
        for (i = 0; i < this.cart.length; i++) {
          if (this.cart[i].id == this.goods.id) {
            return i;
          }
        }
        return -1;
      }
    },

    methods: {
      addGoods: function () {
        if (this.alreadyHave != -1) {
          this.cart[this.alreadyHave].num += this.goods.num;
          if (this.cart[this.alreadyHave].num >= 99)this.cart[this.alreadyHave].num = 99;
        } else {
          this.cart.push({
            id: this.goods.id,
            name: this.goods.name,
            tag: this.goods.tag,
            price: this.goods.price,
            priceBefore: this.goods.priceBefore,
            num: this.goods.num
          });
        }
        localStorage.cart = JSON.stringify(this.cart);
        this.goods.num = 1;
      },
      numMinus: function () {
        if (this.goods.num >= 2) {
          this.goods.num--;
        }
      },
      numAdd: function () {
        if (this.goods.num <= 98) {
          this.goods.num++;
        }
      }
    }
  })
  ;

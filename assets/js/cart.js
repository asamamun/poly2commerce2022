class Cart {
    constructor() {
      // Get the cart items from local storage, if any
      this.items = JSON.parse(localStorage.getItem('cartItems')) || [];
    }
  
    // Add an item to the cart
    addItem(item) {
      this.items.push(item);
      this.updateStorage();
    }
  
    // Remove an item from the cart
    removeItem(itemid) {
      this.items = this.items.filter(i => i.id!=itemid);
      this.updateStorage();    
    }
  
    // Update the items in local storage
    updateStorage() {
      localStorage.setItem('cartItems', JSON.stringify(this.items));
    }
  
    // Get the total price of all items in the cart
    getTotalPrice() {
      return this.items.reduce((total, item) => total + item.price, 0);
    }
    totalItems(){
        return this.items.length;
    }
  }
  
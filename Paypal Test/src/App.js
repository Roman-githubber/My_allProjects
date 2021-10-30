import React, { useState } from 'react';
import Paypal from './components/Paypal';

function App() {
  const [checkout, setCheckout] = useState(false);
  return (
    <div className="App">
      {checkout ? (
        <Paypal />
      ) : (
        <button onClick={() => setCheckout(true)}>Checkout</button>
      )}
    </div>
  );
}

export default App;

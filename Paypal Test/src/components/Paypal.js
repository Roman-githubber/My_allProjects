import React, { useEffect, useRef, useState } from 'react';

const Paypal = () => {
  const paypal = useRef();
  const money = 400;
  const [list, setList] = useState(money);
  // useEffect(() => {
  //   setList(700.0);
  // }, []);

  useEffect(() => {
    window.paypal
      .Buttons({
        createOrder: (data, actions, err) => {
          return actions.order.create({
            intent: 'CAPTURE',
            purchase_units: [
              {
                description: 'Cool looking table',
                amount: {
                  currency_code: 'INR',
                  value: list,
                },
              },
            ],
          });
        },
        onApprove: async (data, actions) => {
          const order = await actions.order.capture();
          console.log(order);
        },
        onError: (err) => {
          console.log(err);
        },
      })
      .render(paypal.current);
  }, []);

  return (
    <div>
      <div ref={paypal}></div>
    </div>
  );
};

export default Paypal;

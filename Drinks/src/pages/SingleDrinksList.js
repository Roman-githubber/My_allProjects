import React from 'react';
import { Link } from 'react-router-dom';

import classes from './SingleDrinksList.module.css';

const SingleDrinksList = (props) => {
  const { name, image, info, category, glass, desc, ingredientList } =
    props.Drink;
  return (
    <div className={classes['cocktail-section']}>
      <Link to="/" className={classes['btn-primary']}>
        back home
      </Link>
      <h2 className={classes['cocktail-title']}>{name}</h2>
      <div className={classes['drink']}>
        <img src={image} alt={name} />
        <div className={classes['drink-info']}>
          <p>
            <span className={classes['drink-data']}>name :</span>
            {name}
          </p>
          <p>
            <span className={classes['drink-data']}>category :</span>
            {category}
          </p>
          <p>
            <span className={classes['drink-data']}>info :</span>
            {info}
          </p>
          <p>
            <span className={classes['drink-data']}>glass :</span>
            {glass}
          </p>
          <p className={classes['drink-description']}>
            <span className={`${classes['drink-data']}`}>decription :</span>
            {desc}
          </p>

          <p>
            <span className={classes['drink-data']}>ingredients :</span>
            {ingredientList.map((item, index) => {
              return item ? <span key={index}>{item}</span> : null;
            })}
          </p>
        </div>
      </div>
    </div>
  );
};

export default SingleDrinksList;

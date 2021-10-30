import React from 'react';
import classes from './CocktailList.module.css';
import { Link } from 'react-router-dom';

const CocktailList = (props) => {
  const { id, image, glass, info, name } = props.items;

  return (
    <section className={classes.cocktail}>
      <div className={classes['img-container']}>
        <img src={image} alt={name}></img>
      </div>
      <div className={classes['cocktail-info']}>
        <h3>{name}</h3>
        <h4>{glass}</h4>
        <p>{info}</p>
        <Link to={`/cocktail/${id}`} className={classes['details-btn']}>
          More Details
        </Link>
      </div>
    </section>
  );
};

export default CocktailList;

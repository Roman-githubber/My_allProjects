import React from 'react';

import { useContextValue } from '../../store/use-fetch';
import classes from './Cocktail.module.css';
import CocktailList from './CocktailList';
import Loading from '../Loading/Loading';
import NotFound from '../../pages/NotFound';

const Cocktail = () => {
  const { loading, cocktail, error } = useContextValue();
  if (loading) {
    return (
      <h3>
        <Loading />
      </h3>
    );
  }

  if (!error && cocktail.length < 1) {
    return (
      <h3 className={classes['cocktails-title']}>
        OOps ! No Cocktail Matched your search
      </h3>
    );
  }
  if (!loading && error) {
    return <NotFound text={error} />;
  }
  return (
    <section className={classes.section}>
      <h2 className={classes['cocktails-title']}>
        <span>All</span> Cocktails
      </h2>
      <div className={classes['cocktails-center']}>
        {cocktail.map((item) => {
          return <CocktailList key={item.id} items={item} />;
        })}
      </div>
    </section>
  );
};

export default Cocktail;

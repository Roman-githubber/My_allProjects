import React, { Fragment } from 'react';
import Search from '../components/Search/Search';
import Cocktail from '../components/Cocktail/Cocktail';

const Home = () => {
  return (
    <Fragment>
      <Search />
      <Cocktail />
    </Fragment>
  );
};

export default Home;

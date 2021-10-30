import React, { useContext, useRef } from 'react';
import classes from './Search.module.css';

import { useContextValue } from '../../store/use-fetch';

const Search = () => {
  const { setSearchInput } = useContextValue();
  const inputSearch = useRef();
  const searchCoctail = () => {
    setSearchInput(inputSearch.current.value);
  };
  return (
    <section className={classes.search}>
      <form
        onSubmit={(e) => e.preventDefault()}
        className={classes['search-form']}
      >
        <div className={classes['form-control']}>
          <label htmlFor="name">favourite Drink</label>
          <input
            type="text"
            id="name"
            ref={inputSearch}
            onChange={searchCoctail}
          />
        </div>
      </form>
    </section>
  );
};

export default Search;

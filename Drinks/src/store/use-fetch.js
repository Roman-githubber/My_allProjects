import React, { useState, useEffect, useCallback, useContext } from 'react';

const url = 'https://www.thecocktaildb.com/api/json/v1/1/search.php?s=';

const CocktailContext = React.createContext({
  loading: false,
  cocktail: null,
  setSearchInput: '',
  error: '',
});

const CocktailProvider = (props) => {
  const [loading, setLoading] = useState(false);
  const [searchInput, setSearchInput] = useState('a');
  const [cocktail, setCocktail] = useState([]);
  const [error, setError] = useState('');

  const fetchCocktails = async () => {
    setLoading(true);
    try {
      const response = await fetch(`${url}${searchInput}`);
      if (!response.ok) {
        setLoading(false);
        throw new Error('Check your Network Connection');
      }

      const data = await response.json();

      const { drinks } = data;

      if (drinks) {
        const drinksDestructure = drinks.map((item) => {
          const { idDrink, strDrink, strDrinkThumb, strAlcoholic, strGlass } =
            item;
          return {
            id: idDrink,
            name: strDrink,
            image: strDrinkThumb,
            info: strAlcoholic,
            glass: strGlass,
          };
        });
        setCocktail(drinksDestructure);
      } else {
        setCocktail([]);
      }
      setLoading(false);
    } catch (error) {
      setError(error.message);
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchCocktails();
    console.log(cocktail);
  }, [searchInput]);

  const contextHelper = {
    loading,
    setSearchInput,
    cocktail,
    error,
  };
  return (
    <CocktailContext.Provider value={contextHelper}>
      {props.children}
    </CocktailContext.Provider>
  );
};

export const useContextValue = () => {
  return useContext(CocktailContext);
};

export { CocktailContext, CocktailProvider };

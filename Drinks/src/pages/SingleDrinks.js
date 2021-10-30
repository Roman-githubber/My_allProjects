import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import SingleDrinksList from './SingleDrinksList';
import Loading from '../components/Loading/Loading';

const SingleCocktail = () => {
  const url = 'https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=';

  const { id } = useParams();

  const [loading, setLoading] = useState(false);
  const [singleCocktail, setSingleCocktail] = useState([]);

  useEffect(() => {
    const singleCocktailFetch = async () => {
      setLoading(true);
      const data = await fetch(`${url}${id}`);

      const response = await data.json();
      const drinks = response.drinks[0];

      try {
        if (response.drinks) {
          const {
            strDrinkThumb: image,
            strDrink: name,
            strInstructions: desc,
            strAlcoholic: info,
            strCategory: category,
            strGlass: glass,
          } = drinks;

          const ingredientList = [
            drinks.strIngredient1,
            drinks.strIngredient2,
            drinks.strIngredient3,
            drinks.strIngredient4,
            drinks.strIngredient5,
          ];

          const singleCocktailObject = [
            {
              image,
              info,
              desc,
              category,
              glass,
              name,
              ingredientList,
            },
          ];

          setSingleCocktail(singleCocktailObject);
        } else {
          setSingleCocktail([]);
        }
      } catch (error) {
        setLoading(false);
        console.log(error.message);
      }
      setLoading(false);
    };
    singleCocktailFetch();
  }, [id]);

  if (loading) {
    return <Loading />;
  }

  return (
    <section className="section cocktail-section">
      {singleCocktail.map((item) => (
        <SingleDrinksList Drink={item} />
      ))}
    </section>
  );
};

export default SingleCocktail;

import React from 'react';
import SingleCocktail from './pages/SingleDrinks';

import {
  BrowserRouter as Router,
  Route,
  Switch,
  Redirect,
} from 'react-router-dom';

import Home from './pages/Home';
import About from './pages/About';
import Navbar from './components/Header/Navbar';
import NotFound from './pages/NotFound';

function App() {
  return (
    <Router>
      <Navbar />
      <main>
        <Switch>
          <Route path="/" exact>
            <Redirect to="/home"></Redirect>
          </Route>
          <Route path="/home">
            <Home />
          </Route>
          <Route path="/About">
            <About />
          </Route>
          <Route path="/cocktail/:id">
            <SingleCocktail />
          </Route>
          <Route path="*">
            <NotFound text="No Page Found !" />
          </Route>
        </Switch>
      </main>
    </Router>
  );
}

export default App;

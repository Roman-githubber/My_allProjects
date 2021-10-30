import React from 'react';
import classes from './Navbar.module.css';
import { NavLink } from 'react-router-dom';

const Navbar = () => {
  return (
    <div className={classes.navbar}>
      <nav className={classes['nav-center']}>
        <NavLink className={classes.logo} to="/home">
          <h2>
            The <span> Cocktails </span>
          </h2>
        </NavLink>
        <ul className={classes['nav-links']}>
          <li>
            <NavLink
              activeClassName={classes.active}
              className={classes.link}
              to="/home"
            >
              Home
            </NavLink>
          </li>
          <li>
            <NavLink
              activeClassName={classes.active}
              className={classes.link}
              to="/about"
            >
              About
            </NavLink>
          </li>
        </ul>
      </nav>
    </div>
  );
};

export default Navbar;

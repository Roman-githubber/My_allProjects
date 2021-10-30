import React from 'react';
import classes from './About.module.css';

const About = () => {
  return (
    <section className={`${classes.section} ${classes['about-section']}`}>
      <h1 className={classes['about-title']}>about us</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit
        sapiente cupiditate, adipisci consequatur eaque similique, consequuntur
        sit voluptatum ipsum, perspiciatis delectus natus impedit quae nemo? Ex
        inventore saepe esse aspernatur dicta mollitia vitae tempore id hic,
        doloremque quia consequuntur. <br />
        sit voluptatum ipsum, perspiciatis delectus natus impedit quae nemo? Ex
        inventore saepe esse aspernatur dicta mollitia vitae tempore id hic,
        doloremque quia consequuntur.
      </p>
    </section>
  );
};

export default About;

import { useRef } from 'react';

import classes from './NewCommentForm.module.css';
import { addComment } from '../../lib/api';
import useHttp from '../../hooks/use-http';

import LoadingSpinner from '../../components/UI/LoadingSpinner';
import { useEffect } from 'react';

// import { useParams } from 'react-router-dom';

const NewCommentForm = (props) => {
  const commentTextRef = useRef();

  const { sendRequest, status, error } = useHttp(addComment);
  const { onAddedComment } = props;
  useEffect(() => {
    if (status === 'completed' && !error) {
      onAddedComment();
    }
  }, [status, error, onAddedComment]);

  const submitFormHandler = (event) => {
    event.preventDefault();
    const enterText = commentTextRef.current.value;

    // optional: Could validate here

    // send comment to server
    sendRequest({ commentData: { text: enterText }, quoteId: props.quoteId });
  };

  return (
    <form className={classes.form} onSubmit={submitFormHandler}>
      {status === 'pending' && (
        <div className="centered">
          <LoadingSpinner></LoadingSpinner>
        </div>
      )}
      <div className={classes.control} onSubmit={submitFormHandler}>
        <label htmlFor="comment">Your Comment</label>
        <textarea id="comment" rows="5" ref={commentTextRef}></textarea>
      </div>
      <div className={classes.actions}>
        <button className="btn">Add Comment</button>
      </div>
    </form>
  );
};

export default NewCommentForm;

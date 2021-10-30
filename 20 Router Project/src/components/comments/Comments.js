import { useState, useEffect, useCallback } from 'react';

import classes from './Comments.module.css';
import NewCommentForm from './NewCommentForm';

import { useParams } from 'react-router';

import useHttp from '../../hooks/use-http';
import { getAllComments } from '../../lib/api';

import LoadingSpinner from '../UI/LoadingSpinner';
import CommentsList from './CommentsList';

const Comments = () => {
  const [isAddingComment, setIsAddingComment] = useState(false);

  const Params = useParams();

  const { sendRequest, status, data: loadedComments } = useHttp(getAllComments);

  const { quoteId } = Params;

  useEffect(() => {
    sendRequest(quoteId);
  }, [quoteId, sendRequest]);

  const startAddCommentHandler = () => {
    setIsAddingComment(true);
  };

  const addedCommentHandler = useCallback(() => {
    sendRequest(quoteId);
  }, [sendRequest, quoteId]);

  let comments;
  if (status === 'pending') {
    comments = (
      <div className="centered">
        <LoadingSpinner></LoadingSpinner>
      </div>
    );
  }

  if (status === 'completed' && loadedComments && loadedComments.length > 0) {
    comments = <CommentsList commnets={loadedComments}></CommentsList>;
  }

  if (
    (status === 'completed' && !loadedComments) ||
    loadedComments.length === 0
  ) {
    comments = <p className="centered">No Comments </p>;
  }
  return (
    <section className={classes.comments}>
      <h2>User Comments</h2>
      {!isAddingComment && (
        <button className="btn" onClick={startAddCommentHandler}>
          Add a Comment
        </button>
      )}
      {isAddingComment && (
        <NewCommentForm
          quoteId={quoteId}
          onAddedComment={addedCommentHandler}
        />
      )}
      {/* <p>Comments...</p> */}
      {comments}
    </section>
  );
};

export default Comments;

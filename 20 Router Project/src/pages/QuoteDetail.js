import { useParams, Route, Link, useRouteMatch } from 'react-router-dom';
import { Fragment } from 'react';
import Comments from '../components/comments/Comments';
import HighlightedQuote from '../components/quotes/HighlightedQuote';

import useHttp from '../hooks/use-http';
import { getSingleQuote } from '../lib/api';

import { useEffect } from 'react';
import LoadingSpinner from '../components/UI/LoadingSpinner';

// const Dummy_quotes = [
//   { id: 'q1', author: 'Max', text: 'Learning React is Fun' },
//   { id: 'q2', author: 'Kislay', text: 'Soon To be Full Stack Devloper' },
// ];

const QuoteDetail = () => {
  const match = useRouteMatch();
  const params = useParams();
  const {
    sendRequest,
    status,
    data: loadedQuote,
    error,
  } = useHttp(getSingleQuote, true);

  // const quote = Dummy_quotes.find((quote) => quote.id === params.quoteId);
  const { quoteId } = params;
  useEffect(() => {
    sendRequest(quoteId);
  }, [sendRequest, quoteId]);

  if (status === 'pending') {
    return (
      <div className="centered">
        <LoadingSpinner />
      </div>
    );
  }

  if (error) {
    return <p className="centered">{error}</p>;
  }
  if (!loadedQuote.text) return <p>No Quote Found</p>;

  return (
    <Fragment>
      <HighlightedQuote text={loadedQuote.text} author={loadedQuote.author} />

      <Route path={match.path} exact>
        <div className="centered">
          <Link className="btn--flat" to={`${match.url}/comments`}>
            Load Comments
          </Link>
        </div>
      </Route>

      <Route path={`${match.path}/comments`}>
        <Comments />
      </Route>
    </Fragment>
  );
};

export default QuoteDetail;
// /quotes/${params.quoteId}

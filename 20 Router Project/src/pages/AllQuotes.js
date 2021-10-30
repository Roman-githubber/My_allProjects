import QuoteList from '../components/quotes/QuoteList';
import useHttp from '../hooks/use-http';
import { getAllQuotes } from '../lib/api';

import { useEffect } from 'react';
import LoadingSpinner from '../components/UI/LoadingSpinner';

import NoQuotesFound from '../components/quotes/NoQuotesFound';

// const Dummy_quotes = [
//   { id: 'q1', author: 'Max', text: 'Learning React is Fun' },
//   { id: 'q2', author: 'Kislay', text: 'Soon To be Full Stack Devloper' },
// ];

const AllQuote = () => {
  const {
    sendRequest,
    status,
    data: loadedQuotes,
    error,
  } = useHttp(getAllQuotes, true);

  useEffect(() => {
    sendRequest();
  }, [sendRequest]);
  if (status === 'pending') {
    return (
      <div className="centered">
        <LoadingSpinner></LoadingSpinner>
      </div>
    );
  }

  if (error) {
    return <p className="centered focuesd">{error}</p>;
  }
  if ((status === 'completed') & (!loadedQuotes || loadedQuotes.length === 0)) {
    return <NoQuotesFound></NoQuotesFound>;
  }

  return <QuoteList quotes={loadedQuotes}></QuoteList>;
};

export default AllQuote;

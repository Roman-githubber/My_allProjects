// .then(res=>res.json())
// .then(json=>console.log(json))

const newFunction = async () => {
  const data = await fetch('https://data.covid19india.org/data.json');
  //https://data.covid19india.org/state_district_wise.json
  const response = await data.json();
  console.log(response.statewise);
};

newFunction();

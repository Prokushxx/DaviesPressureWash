import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import axios from 'axios';


function Example() {

  const [data, setData] = useState({
    
  })
  // const http = axios.create({
  //   baseURL : 'http://127.0.0.1:8000',
  //   headers: {
  //     'X-Requested-With': 'XMLRequest',
  //     'Accept': 'application/json',
  //   }
  // });

  function getData() {
   axios.get('http://127.0.0.1:8000')
   .then(res => {
     setData(res.data)
     console.log(res.data);
   }).catch(err => {
     console.log(err);
   });
  }

  useEffect(()=>{
    getData();
  },[])

  return (
    <div className="container">
      <h1>WEED</h1>
    </div>
  );
}

export default Example;

if (document.getElementById('example')) {
  ReactDOM.render(<Example />, document.getElementById('example'));
}

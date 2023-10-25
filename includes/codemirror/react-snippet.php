
import React, { useState, useEffect } from 'react';
import axios from 'axios';

function ApiExample() {
  const [data, setData] = useState<any>(null); // Use appropriate data type

  // Function to perform a GET request
  const fetchData = async () => {
    try {
      const response = await axios.get('https://api.example.com/data'); // Replace with your API endpoint
      setData(response.data);
    } catch (error) {
      console.error('Error fetching data:', error);
    }
  };

  // Function to perform a POST request
  const postData = async () => {
    try {
      const response = await axios.post('https://api.example.com/endpoint', { key: 'value' }); // Replace with your API endpoint and data
      console.log('Data posted successfully:', response.data);
    } catch (error) {
      console.error('Error posting data:', error);
    }
  };

  // Fetch data when the component mounts
  useEffect(() => {
    fetchData();
  }, []);

  return (
    <div>
      <h1>API Example</h1>
      <button onClick={postData}>POST Data</button>
      <div>
        <h2>Fetched Data:</h2>
        <pre>{JSON.stringify(data, null, 2)}</pre>
      </div>
    </div>
  );
}

export default ApiExample;
</textarea>

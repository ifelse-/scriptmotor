
<template>
  <div>
    <h1>API Example</h1>
    <button @click="fetchData">GET Data</button>
    <button @click="postData">POST Data</button>
    <div>
      <h2>Fetched Data:</h2>
      <pre>{{ fetchedData }}</pre>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import axios from 'axios';

export default defineComponent({
  data() {
    return {
      fetchedData: '',
    };
  },
  methods: {
    // Function to fetch data from the API
    async fetchData() {
      try {
        const response = await axios.get('https://api.example.com/data'); // Replace with your API endpoint
        this.fetchedData = JSON.stringify(response.data, null, 2);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    },
    // Function to post data to the API
    async postData() {
      try {
        const dataToPost = { key: 'value' }; // Replace with the data you want to post
        const response = await axios.post('https://api.example.com/endpoint', dataToPost); // Replace with your API endpoint
        console.log('Data posted successfully:', response.data);
      } catch (error) {
        console.error('Error posting data:', error);
      }
    },
  },
});
</script>
const app = new Vue({
  el: "#app",
  data: {
    albumsList: [],
    /*currentPage: '',
    totalPages: ''*/
  },
  methods: {

    getResults() {
      
      axios.get('server.php').then((resp) => {
        //console.log(resp.data);
        this.albumsList = resp.data.results;
        /*this.currentPage = resp.data.currentPage;
        this.totalPages = resp.data.totalPages;*/
      });
    }

  },
  mounted() {
    this.getResults();
  }
});
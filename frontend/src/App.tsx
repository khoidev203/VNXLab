import React from "react";
import AppContainer from "./Route/Routes";
import Header from "./Component/Layout/Header/Header";
import Footer from "./Component/Layout/Footer/Footer";

class App extends React.Component {
  render() {
    return (
      <div>
        <Header />
        <AppContainer />
        <Footer />
      </div>
    );
  }
}

export default App;
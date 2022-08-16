import React, {Component} from "react";
import logo from "./logo.svg";
import "./App.css";

class App extends Component {
    //inicializacao do estado padrao
    constructor(props) {
        super(props);
        this.state = {
            apiResponse: "",
            dbResponse: ""
        };
    }

    //metodo que ira buscar os dados da API e armazenar a resposta em this.state.apiResponse
    callAPI() {
        fetch("http://localhost:9000/testAPI")
            .then(res => res.text())
            .then(res => this.setState({apiResponse: res}))
            .catch(err => err);
    }

    callDB() {
        fetch("http://localhost:9000/testDB")
            .then(res => res.text())
            .then(res => this.setState({dbResponse: res}))
            .catch(err => err);
    }

    //ira executar o metodo callAPI() apos a montagem do componente
    componentDidMount() {
        this.callAPI();
        this.callDB();
    }

    render() {
        return (
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">Welcome to React</h1>
                </header>
                {/*texto recuperado da API*/}
                <p className="App-intro">{this.state.apiResponse}</p>
                <p className="App-intro">{this.state.dbResponse}</p>
            </div>
        );
    }
}

export default App;
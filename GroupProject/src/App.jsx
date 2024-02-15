import { Route, BrowserRouter as Router, Switch } from "react-router-dom";

import "./App.css";
import Group from "./Pages/Group/Group";
import Home from "./Pages/Home/home";
import Login from "./Pages/Login/login";
import Profile from "./Pages/Profile/profile";

function App() {
    return (
        <Router>
            <Switch>
                <Route path="./Pages/Home/home" exact component={Home} />
                <Route path="./Pages/Group/Group" component={Group} />
                <Route path="./Pages/Login/login" component={Login} />
                <Route path="./Pages/Profile/profile" component={Profile} />
                <Route component={Home} />
            </Switch>
        </Router>
    );
}

export default App;

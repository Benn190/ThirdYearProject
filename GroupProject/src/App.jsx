import { Route, BrowserRouter as Router, Routes } from "react-router-dom";
import "./App.css";
import Group from "./Pages/Group";
import Home from "./Pages/home";
import Profile from "./Pages/profile";
import "./index.css";

function App() {
    return (
<<<<<<< HEAD
        <div className="App">
            <Router>
                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route exact path="/profile" element={<Profile />} />
                    <Route exact path="/group" element={<Group />} />
                </Routes>
            </Router>
        </div>
=======
            <Router>
                <Switch>
                    <Route path="./Pages/Home/home" exact component={Home} />
                    <Route path="./Pages/Group/Group" component={Group} />
                    <Route path="./Pages/Login/login" component={Login} />
                    <Route path="./Pages/Profile/profile" component={Profile} />
                    <Route component={Home} />
                </Switch>
            </Router>
>>>>>>> 9c242cb8c5d63acd83be1556b5170e8d0ef9ef6a
    );
}

export default App;

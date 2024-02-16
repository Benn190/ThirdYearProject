import { Route, BrowserRouter as Router, Routes } from "react-router-dom";
import "./App.css";
import Group from "./Pages/Group";
import Home from "./Pages/home";
import Profile from "./Pages/profile";
import "./index.css";

function App() {
    return (
        <div className="App">
            <Router>
                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route exact path="/profile" element={<Profile />} />
                    <Route exact path="/group" element={<Group />} />
                </Routes>
            </Router>
        </div>
    );
}

export default App;

import './bootstrap';

import ReactDOM from "react-dom/client";
import Counter from "./components/Counter";
import TestImg from "../img/test.png";

function App() {
	return (
			<>
					<h1>Hello World</h1>
					<img src={TestImg} />
					<Counter />
			</>
	);
}

const root = ReactDOM.createRoot(document.getElementById("app"));
root.render(<App />);

import logo from './logo.svg';
import './App.css';
import Fullname from './component/user/Fullname';
import Section from './component/user/Section';
import Desc from './component/user/Desc';

function App() {
  return (
    <div  classname='App'>
      <Fullname/>
      <Section/>
      <Desc/>
    </div>
  );
}

export default App;

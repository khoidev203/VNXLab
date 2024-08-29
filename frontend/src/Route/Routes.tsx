import { Route, Routes } from "react-router-dom"
import Home from "../Layout/Home/Home"


const AppContainer:React.FC = () => {
    return (
        <>
        <Routes>
            <Route path="/" element={<Home />}/>
        </Routes>
        </>
    )
}

export default AppContainer
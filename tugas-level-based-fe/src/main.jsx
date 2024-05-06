import React from 'react'
import ReactDOM from 'react-dom/client'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import App from './App.jsx'
import './index.css'
import Login from './pages/Login.jsx'
import Register from './pages/Register.jsx'
import SimpleLayout from './components/SimpleLayout'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <BrowserRouter>
    <SimpleLayout>
    <Routes>
      <Route path='/' element={<App />}/>
      <Route path='/login' element={<Login />}/>
      <Route path='/register' element={<Register />}/>
    </Routes>
    </SimpleLayout>
    </BrowserRouter>
  </React.StrictMode>,
)

import { Link } from "react-router-dom"

function Header() {
  return (
    <header className="flex items-center justify-between h-16 px-4 text-white bg-gray-900">
      <div className="flex items-center">
        <img src="/vite.svg" alt="Vite Logo" className="h-10 mr-2"/>
      </div>
      <nav>
        <ul className="flex space-x-4">
          <li>
            <Link to={'/'} className="font-semibold hover:text-gray-300">
            Home
            </Link>
          </li>
          <li>
            <Link to={'/login'} className="font-semibold hover:text-gray-300">
            Login
            </Link>
          </li>
          <li>
            <Link to={'/register'} className="font-semibold hover:text-gray-300">
            Register
            </Link>
          </li>
        </ul>
      </nav>
    </header>
  )
}
export default Header
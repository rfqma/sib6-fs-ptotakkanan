function Header() {
  return (
    <header className="flex items-center justify-between h-16 px-4 text-white bg-gray-900">
      <div className="flex items-center">
        <img src="/vite.svg" alt="Vite Logo" className="h-10 mr-2"/>
      </div>
      <nav>
        <ul className="flex space-x-4">
          <li><a href="##" className="font-semibold hover:text-gray-300">Home</a></li>
          <li><a href="##" className="font-semibold hover:text-gray-300">About</a></li>
          <li><a href="##" className="font-semibold hover:text-gray-300">Services</a></li>
          <li><a href="##" className="font-semibold hover:text-gray-300">Contact</a></li>
        </ul>
      </nav>
    </header>
  )
}
export default Header
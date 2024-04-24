function Sidebar() {
  return (
    <aside className="w-64 bg-gray-900">
      <div className="h-full p-6">
      <img src="/vite.svg" alt="Vite Logo" className="h-10 mb-5"/>
        <ul className="flex flex-col gap-2 mt-5">
          <li><a href="##" className="block font-semibold text-white hover:text-gray-300">Dashboard</a></li>
          <li><a href="##" className="block font-semibold text-white hover:text-gray-300">Projects</a></li>
          <li><a href="##" className="block font-semibold text-white hover:text-gray-300">Tasks</a></li>
          <li><a href="##" className="block font-semibold text-white hover:text-gray-300">Messages</a></li>
        </ul>
      </div>
    </aside>
  )
}
export default Sidebar
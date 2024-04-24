import Header from "./Header"
import Sidebar from "./Sidebar"
import Footer from "./Footer"

// eslint-disable-next-line react/prop-types
function SimpleLayout({children}) {
  return (
    <div className="flex min-h-screen">
        <Sidebar />
        <div className="flex flex-col flex-1">
          <Header />
          <main className="flex-1 overflow-y-auto">{children}</main>
          <Footer />
        </div>
    </div>
  )
}
export default SimpleLayout
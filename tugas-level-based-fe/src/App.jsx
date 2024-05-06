import './App.css'

import Card from './components/Card'
import { useState, useEffect } from 'react'

function App() {
  const [data, setData] = useState(null)
  // eslint-disable-next-line no-unused-vars
  const [loading, setLoading] = useState(null)

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await fetch('http://localhost:8000/dummies')
        if (!response.ok) {
          throw new Error('Network response was not ok')
        }
        const data = await response.json()
        setData(data)
        console.log(data)
      } catch (error) {
        console.error('Error fetching data:', error)
      } finally {
        setLoading(false)
      }
    }

    fetchData()
  }, [])

  return (
    <>
      
      <main className='p-4'>
          <h1 className="mb-4 text-2xl font-semibold text-red-800">Lorem Ipsum</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, deleniti!</p>
          
          <div className="container grid grid-cols-1 gap-6 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            {
              data && data.map((item, index) => {
                return (
                    <Card key={index} props={item} />
                )
              })
            }
          </div>
      </main>
    
    </>
  )
}

export default App

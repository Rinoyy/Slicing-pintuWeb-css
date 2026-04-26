export default function Hero() {
  return (
    <div className="container">
      <div className="main-content mx-auto">
        <div className="row align-items-center">

          <div className="col-lg-6 pt-3">
            <div className="main-text">
              <div className="row col-responsif">

                <div className="col-12 main-h1">
                  <h1>Crypto App<br />All in One</h1>
                </div>

                <div className="col-12 jaulbeli mt-2">
                  <div className="text">
                    <span className="text-white">Jual beli crypto simpel, mulai dari Rp 11.000.</span>
                  </div>
                </div>

                <div className="col-auto mt-4 download-sekarang">
                  <div className="hero-download-btn bg-white rounded-pill px-4 py-2 text-center" style={{ cursor: 'pointer' }}>
                    <span className="text-primary fw-bolder">Download Sekarang</span>
                  </div>
                </div>

                <div className="col-12 mt-4">
                  <div className="rating-badge">
                    <div className="stars d-flex gap-1">
                      {[...Array(4)].map((_, i) => (
                        <i key={i} className="bi bi-star-fill" style={{ color: '#fff' }}></i>
                      ))}
                      <i className="bi bi-star-half" style={{ color: '#fff' }}></i>
                    </div>
                    <span>4.7 Rating</span>
                    <div className="vr" style={{ background: 'rgba(255,255,255,0.4)' }}></div>
                    <span>7M+ download</span>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div className="col-lg-6">
            <div className="main-img text-center">
              <img src="/img/mainPhone.png" alt="Pintu App" className="img-fluid hero-phone" />
            </div>
          </div>

        </div>
      </div>
    </div>
  )
}

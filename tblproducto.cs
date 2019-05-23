using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Computec
{
    #region Tblproducto
    public class Tblproducto
    {
        #region Member Variables
        protected int _idProductos;
        protected string _strNombre;
        protected string _categoria;
        protected unknown _dblPrecio;
        protected int _intEstado;
        protected string _strDescripcion;
        protected string _strImagen;
        #endregion
        #region Constructors
        public Tblproducto() { }
        public Tblproducto(string strNombre, string categoria, unknown dblPrecio, int intEstado, string strDescripcion, string strImagen)
        {
            this._strNombre=strNombre;
            this._categoria=categoria;
            this._dblPrecio=dblPrecio;
            this._intEstado=intEstado;
            this._strDescripcion=strDescripcion;
            this._strImagen=strImagen;
        }
        #endregion
        #region Public Properties
        public virtual int IdProductos
        {
            get {return _idProductos;}
            set {_idProductos=value;}
        }
        public virtual string StrNombre
        {
            get {return _strNombre;}
            set {_strNombre=value;}
        }
        public virtual string Categoria
        {
            get {return _categoria;}
            set {_categoria=value;}
        }
        public virtual unknown DblPrecio
        {
            get {return _dblPrecio;}
            set {_dblPrecio=value;}
        }
        public virtual int IntEstado
        {
            get {return _intEstado;}
            set {_intEstado=value;}
        }
        public virtual string StrDescripcion
        {
            get {return _strDescripcion;}
            set {_strDescripcion=value;}
        }
        public virtual string StrImagen
        {
            get {return _strImagen;}
            set {_strImagen=value;}
        }
        #endregion
    }
    #endregion
}